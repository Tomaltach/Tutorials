package ie.tom.tutorials.lab1;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

public class TestVarietyShow {

	public static void main(String[] args) {
		@SuppressWarnings("resource")
		ApplicationContext ctx = new ClassPathXmlApplicationContext(
				"ie/tom/tutorials/lab1/application-config.xml");
		@SuppressWarnings("resource")
		ApplicationContext ctx3 = new ClassPathXmlApplicationContext(
				"ie/tom/tutorials/lab3/application-config.xml");
		Performer johnny = (Performer) ctx.getBean("johnny");
		johnny.perform();
		Performer jenny = (Performer) ctx3.getBean(PoeticJuggler.class);
		jenny.perform();
		Performer bobby = (Performer) ctx.getBean("bobby");
		bobby.perform();
		Performer timmy = (Performer) ctx.getBean("timmy");
		timmy.perform();
		Performer simonAndGarfunkel = (Performer) ctx.getBean("simonAndGarfunkel");
		simonAndGarfunkel.perform();
	}
}
