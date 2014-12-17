package ie.tom.tutorials.patterns.factory;

public class ItalianRestaurant implements Restaurant {

	@Override
	public Appetizer getAppetizer() {
		return new Pizzette();
	}
	@Override
	public Entree getEntree() {
		return new Pasta();
	}
	@Override
	public Dessert getDesert() {
		return new Gelato();
	}
}
