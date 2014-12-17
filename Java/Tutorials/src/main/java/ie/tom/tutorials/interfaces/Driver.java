package ie.tom.tutorials.interfaces;

public class Driver {

	public static void main(String[] args) {
		TestDAO dao = new Test();
		dao.setName("Thomas");
		System.out.println("Name: " + dao.getName());
	}
}