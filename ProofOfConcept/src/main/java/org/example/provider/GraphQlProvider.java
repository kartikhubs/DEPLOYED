package org.example.provider;

import graphql.GraphQL;
import graphql.schema.DataFetcher;
import graphql.schema.GraphQLSchema;
import graphql.schema.idl.*;
import jakarta.annotation.PostConstruct;
import org.example.datafetcher.GraphQLDataFetcher;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.core.io.ClassPathResource;
import org.springframework.core.io.Resource;
import org.springframework.stereotype.Component;

import java.io.IOException;
import java.nio.charset.StandardCharsets;
import java.nio.file.Files;
import java.util.logging.Logger;


@Component
public class GraphQlProvider {
    Logger logger = Logger.getLogger(GraphQlProvider.class.getName());
    private GraphQL graphQL;

    @Autowired
    private GraphQLDataFetcher graphQLDataFetcher;
    @PostConstruct
    public void init() throws IOException {
        final Resource resource = new ClassPathResource ("schema.graphqls");
        String sdl = null;
        try {
            sdl = new String( Files.readAllBytes(resource.getFile().toPath()), StandardCharsets.UTF_8);
        } catch (IOException e) {
            e.printStackTrace();
        }
        GraphQLSchema graphQLSchema = buildSchema(sdl);
        this.graphQL = GraphQL.newGraphQL(graphQLSchema).build();
    }
    private GraphQLSchema buildSchema(String sdl) {
        TypeDefinitionRegistry typeRegistry = new SchemaParser ().parse(sdl);
        RuntimeWiring runtimeWiring = buildWiring();
        SchemaGenerator schemaGenerator = new SchemaGenerator();
        return schemaGenerator.makeExecutableSchema(typeRegistry, runtimeWiring);
    }
    private RuntimeWiring buildWiring() {
        return RuntimeWiring.newRuntimeWiring ( )
                .type ( TypeRuntimeWiring.newTypeWiring ( "Query" ).dataFetcher ( "repos" , graphQLDataFetcher.getRepoList ( ) ) )
                .type ( TypeRuntimeWiring.newTypeWiring ( "Mutation" ).dataFetcher ( "addRepo" , graphQLDataFetcher.addRepo ( ) ) )
                .build ( );


    }
    @Bean
    public GraphQL graphQL() {
        return graphQL;
    }
}


