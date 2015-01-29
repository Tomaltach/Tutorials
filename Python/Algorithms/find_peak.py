#demonstrate how to use a class with Tkinter
class Application:
	""" Algorithms """
	def __init__(self):
		""" Initialize the Program """
		self.get_input()

	def get_input(self):
		""" Get user input """
		input = raw_input('Enter numbers to be put into array using , to seperate numbers: ')
		self.numbers = map(int, input.split(','))
		for i in range(0,len(self.numbers)):
			print self.numbers[i]
			self.find_peak_left_to_right(i)
		self.find_peak_center()
		
	def find_peak_left_to_right(self, i):
		""" Find the peak of an array """
		print "->", i, "<-"
		if i == 0:				
			if self.numbers[i] >= self.numbers[i+1]:
				print "First Peak Found!"
		elif i == len(self.numbers)-1:				
			if self.numbers[i] >= self.numbers[i-1]:
				print "Last Peak Found!"
		else:
			if self.numbers[i] >= self.numbers[i-1] and self.numbers[i] >= self.numbers[i+1]:
				print "Peak Found!"

	def find_peak_center(self):
		""" Find the peak of an array """
		if self.numbers(len(self.numbers)/2) > self.numbers(len(self.numbers)/2+1):		
			print "left"
		elif self.numbers(len(self.numbers)/2) < self.numbers(len(self.numbers)/2+1):		
			print "right"
		else:
			print "peak found"	

app = Application()