# THE MENU FUNCTION
# The program asks for a string with all the menu options in it,
# and a text string asking a question.
# make sure every menu entry is unique.

def menu(list, question):
    for entry in list:
        print 1 + list.index(entry),
        print ") " + entry

    return input(question) - 1

# def menu(list, question): is telling the function to
# ask for two bits of information:
# A list of all the menu entries,
# and the question it will ask when all the options have been printed

# for entry in list: is pretty much saying;
#'for every entry in the list, do the following:'

# print list.index(entry) + 1 uses the .index() function to find
# where in the list the entry is in. print function then prints it
# it adds 1 to make the numbers more intelligable.

# print ") " + entry prints a bracket, and then the entry name

# after the for loop is finished, input(question) - 1 asks the question,
# and returns the value to the main program (minus 1, to turn it back to
# the number the computer will understand).