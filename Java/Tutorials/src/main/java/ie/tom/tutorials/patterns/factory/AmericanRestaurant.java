package ie.tom.tutorials.patterns.factory;

public class AmericanRestaurant implements Restaurant {

	@Override
	public Appetizer getAppetizer() {
		return new Oysters();
	}
	@Override
	public Entree getEntree() {
		return new Steak();
	}
	@Override
	public Dessert getDesert() {
		return new CheeseCake();
	}
}
