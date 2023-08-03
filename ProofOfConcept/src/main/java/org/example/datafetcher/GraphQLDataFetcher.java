package org.example.datafetcher;

import org.example.Entity.Repos;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.core.ParameterizedTypeReference;
import org.springframework.http.HttpEntity;
import org.springframework.http.HttpHeaders;
import org.springframework.http.HttpMethod;
import org.springframework.http.MediaType;
import org.springframework.stereotype.Component;
import org.springframework.web.client.RestTemplate;

import java.util.List;

@Component
public class GraphQLDataFetcher {

    private final String REST_URL = "https://api.github.com/users/kartikhubs/repos";

    @Autowired
    private RestTemplate restTemplate;
    public Fetcher < List < Repos > > getRepoList() {
        return dataFetchingEnvironment -> restTemplate
                .exchange(REST_URL, HttpMethod.GET, null, new ParameterizedTypeReference <List<Repos>> () {
                }).getBody();

    }
    public Fetcher <String> addRepo() {
        return dataFetchingEnvironment -> {
            String node_id = dataFetchingEnvironment.getArgument ( "node_id" );
            String name = dataFetchingEnvironment.getArgument ( "name" );
            Repos repo = new Repos ( );
            repo.setNode_id ( node_id );
            repo.setName ( name );
            HttpHeaders headers = new HttpHeaders ( );
            headers.setContentType ( MediaType.APPLICATION_JSON );
            HttpEntity < Repos > entity = new HttpEntity <> ( repo , headers );
            return restTemplate.postForObject ( REST_URL , entity , String.class );
        };
    }
}
