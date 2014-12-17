package ie.tom.tutorials.patterns.factory;

public class Main {

	public static void main(String[] args) {
		Restaurant american = new AmericanRestaurant();
		Restaurant italian = new ItalianRestaurant();

		System.out.println("Restaurants:");
		
		System.out.println("\nAmerican:");
		american.getAppetizer().eat();
		american.getEntree().eat();
		american.getDesert().enjoy();
		
		System.out.println("\nItalian:");		
		italian.getAppetizer().eat();
		italian.getEntree().eat();
		italian.getDesert().enjoy();
	}
}
