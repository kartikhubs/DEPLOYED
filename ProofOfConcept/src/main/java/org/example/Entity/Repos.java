package org.example.Entity;

public class Repos {
    private String node_id;
    private String name;

    public String getNode_id() {
        return node_id;
    }

    public void setNode_id(String node_id) {
        this.node_id = node_id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public Repos(String node_id , String name) {
        this.node_id = node_id;
        this.name = name;
    }

    public Repos() {
    }
}

