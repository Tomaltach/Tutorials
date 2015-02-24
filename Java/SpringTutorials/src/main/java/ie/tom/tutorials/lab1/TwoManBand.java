package ie.tom.tutorials.lab1;

import java.util.Properties;

public class TwoManBand implements Performer {
	private Properties instruments;

	public TwoManBand() {}
	public void setInstruments(Properties instruments) {
		this.instruments = instruments;
	}
	public void perform() {
		for(Object key : instruments.keySet()) {
			System.out.println(key + " : ");
			String instrumentSound = (String)instruments.getProperty((String)key);
			System.out.println(instrumentSound);
		}
	}
}
