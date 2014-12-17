package ie.tom.tutorials.patterns.singleton.oldtype;

public class Singleton {
	private static Singleton instance;

	public Singleton() {}
	public static synchronized Singleton getInstance() {
		if(instance == null) {
			instance = new Singleton();
		}
		return instance;
	}
}