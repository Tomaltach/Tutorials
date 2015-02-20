package ie.tom.tutorials.lab1;

public class Juggler implements Performer {
	private int beanBags;
	
	public Juggler() {}
	public Juggler(int beanBags) {
		this.beanBags = beanBags;
	}
	public void perform() {
		System.out.println("JUGGLING " + beanBags + " BEANBAGS");
	}
	public void setBeanBags(int beanBags) {
		this.beanBags = beanBags;
	}
}
