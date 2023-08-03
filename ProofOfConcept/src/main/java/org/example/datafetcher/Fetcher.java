package org.example.datafetcher;

import graphql.schema.DataFetcher;
import graphql.schema.DataFetchingEnvironment;

public interface Fetcher<T> extends DataFetcher {
    T get(DataFetchingEnvironment dataFetchingEnvironment) throws Exception;
}
