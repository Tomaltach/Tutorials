#demonstrate how to use a class with Tkinter
from Tkinter import *

class Application(Frame):
	""" A GUI application with three buttons. """
	def __init__(self, master):
		""" Initialize the Frame """
		Frame.__init__(self, master)
		self.grid()
		self.create_widgets()
		
	def create_widgets(self):
		""" Create widgets for movie type choice. """
		#create label
		Label(self, text = "Choose your favourite type of movie").grid(row = 0, column = 0, sticky = W)
		
		#instructions
		Label(self, text = "Selecting one:").grid(row = 1, column = 0, sticky = W)
		
		#variable for single, favourite type of movie
		self.favourite = StringVar()
		self.favourite.set("1")

		# check button for comedy
		Radiobutton(self, text = "Comedy", variable = self.favourite, value = "comedy", command = self.update_text).grid(row = 2, column = 0, sticky = W)
		# check button for drama
		Radiobutton(self, text = "Drama", variable = self.favourite, value = "drama", command = self.update_text).grid(row = 3, column = 0, sticky = W)
		# check button for romance
		Radiobutton(self, text = "Romance", variable = self.favourite, value = "romance", command = self.update_text).grid(row = 4, column = 0, sticky = W)

		#create text output
		self.result = Text(self, width = 40, height = 5, wrap = WORD)
		self.result.grid(row = 5, column = 0, columnspan = 3, sticky = W)
	
	def update_text(self):
		""" Update text widget and display favourite movie types """
		message = "Your favourite type of movie is "
		message += self.favourite.get()
		
		self.result.delete(0.0, END)
		self.result.insert(0.0, message)
		
root = Tk()
root.title("Radio Buttons")
root.geometry("200x150")

app = Application(root)
root.mainloop()