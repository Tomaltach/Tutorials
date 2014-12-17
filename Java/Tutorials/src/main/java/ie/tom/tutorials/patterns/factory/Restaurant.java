package ie.tom.tutorials.patterns.factory;

public interface Restaurant {
	public Appetizer getAppetizer();
	public Entree getEntree();
	public Dessert getDesert();
}
