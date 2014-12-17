package ie.tom.tutorials.interfaces;

public class Test implements TestDAO {
	private String name;
	
	@Override
	public void setName(String name) {
		this.name = name;
	}
	@Override
	public String getName() {
		manipulate();
		return name;
	}
	private void manipulate() {
		name = "Mr. " + name;
	}
}