import tkinter as tk
from tkinter import ttk

class UserInfoGUI:
    def __init__(self, root):
        self.root = root
        self.root.title("User Information")

        # Variables to store user information
        self.age_var = tk.StringVar()
        self.gender_var = tk.StringVar()

        # Age label and entry
        age_label = ttk.Label(root, text="Age:")
        age_label.grid(row=0, column=0, padx=5, pady=5)
        self.age_entry = ttk.Entry(root, textvariable=self.age_var)
        self.age_entry.grid(row=0, column=1, padx=5, pady=5)

        # Gender label and dropdown
        gender_label = ttk.Label(root, text="Gender:")
        gender_label.grid(row=1, column=0, padx=5, pady=5)
        self.gender_combobox = ttk.Combobox(root, textvariable=self.gender_var, values=["Male", "Female", "Other"])
        self.gender_combobox.grid(row=1, column=1, padx=5, pady=5)
        self.gender_combobox.current(0)  # Set default value to "Male"

        # Submit button
        submit_button = ttk.Button(root, text="Submit", command=self.submit_info)
        submit_button.grid(row=2, columnspan=2, padx=5, pady=5)

    def submit_info(self):
        age = self.age_var.get()
        gender = self.gender_var.get()

        # Do something with the user information (e.g., print it)
        print("Age:", age)
        print("Gender:", gender)

if __name__ == "__main__":
    root = tk.Tk()
    app = UserInfoGUI(root)
    root.mainloop()
