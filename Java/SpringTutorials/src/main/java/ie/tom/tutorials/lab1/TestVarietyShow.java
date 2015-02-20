package ie.tom.tutorials.lab1;

import org.springframework.context.ApplicationContext;
import org.springframework.context.support.ClassPathXmlApplicationContext;

public class TestVarietyShow {

	public static void main(String[] args) {
		@SuppressWarnings("resource")
		ApplicationContext ctx = new ClassPathXmlApplicationContext(
				"ie/tom/tutorials/lab1/application-config.xml");
		Performer johnny = (Performer) ctx.getBean("johnny");
		johnny.perform();
		Performer jenny = (Performer) ctx.getBean("jenny");
		jenny.perform();
	}
}
