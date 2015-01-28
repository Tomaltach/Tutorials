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
		""" Create button, text and entry widgets. """
		#create label
		self.instruction = Label(self, text = "Enter the password")
		self.instruction.grid(row = 0, column = 0, columnspan = 2, sticky = W)
		
		#create entry widget
		self.password = Entry(self)
		self.password.grid(row = 1, column =1, sticky = W)
		
		#create submit button
		self.submit_button = Button(self)
		self.submit_button.grid(row = 2, column = 0, sticky = W)
		self.submit_button["text"] = "Submit"
		self.submit_button["command"] = self.reveal
		
		#create text output
		self.text = Text(self, width = 35, height = 5, wrap = WORD)
		self.text.grid(row = 3, column = 0, columnspan = 2, sticky = W)
	
	def reveal(self):
		""" Display message based on the password typed in """
		content = self.password.get()
		
		if content == "password":
			message = "You have access to something special."
		else:
			message = "Access denied."
		self.text.delete(0.0, END)
		self.text.insert(0.0, message) #0.0 row and column position
		
root = Tk()
root.title("Password Widget")
root.geometry("200x150")

app = Application(root)
root.mainloop()