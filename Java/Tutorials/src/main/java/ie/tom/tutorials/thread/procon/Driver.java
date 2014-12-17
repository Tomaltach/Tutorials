package ie.tom.tutorials.thread.procon;

public class Driver {
	static SharedBuffer buffer = new SharedBuffer();

	public static void main(String[] args) {
		Producer producer = new Producer(buffer);
		producer.start();
		new Consumer(buffer).start();
	}
}
