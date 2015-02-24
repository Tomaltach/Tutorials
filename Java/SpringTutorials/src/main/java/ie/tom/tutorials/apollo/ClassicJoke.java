package ie.tom.tutorials.apollo;

public class ClassicJoke implements Joke {
	private String question;
	private String punchLine;
	
	public ClassicJoke() {}
	public void tell() {
		System.out.print(toString());
	}
	public String toString() {
		return question + " " + punchLine;
	}
}
