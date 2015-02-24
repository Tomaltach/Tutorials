package ie.tom.tutorials.apollo;

import ie.tom.tutorials.lab1.Performer;
import ie.tom.tutorials.lab1.Person;

import java.util.List;

public class Comedian extends Person implements Performer {
	private List<Joke> jokes;
	
	public Comedian() {}
	public List<Joke> getJokes() {
		return jokes;
	}
	public void setJokes(List<Joke> jokes) {
		this.jokes = jokes;
	}
	public void perform() {
		for(Joke j : jokes) {
			System.out.println(j.toString());
		}
	}
}
