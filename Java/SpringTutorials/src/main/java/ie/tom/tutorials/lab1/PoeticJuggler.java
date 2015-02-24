package ie.tom.tutorials.lab1;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.beans.factory.annotation.Value;
import org.springframework.stereotype.Component;

@Component("jenny")
public class PoeticJuggler extends Juggler {
	private Poem poem;
	
	@Autowired
	public PoeticJuggler(Poem poem) {
		super();
		this.poem = poem;
	}
	public PoeticJuggler(@Value("6") int beanBags, @Qualifier("sonnet29") Poem poem) {
		super(beanBags);
		this.poem = poem;
	}
	public void perform() {
		super.perform();
		System.out.println("While reciting...");
		poem.recite();
	}
}
