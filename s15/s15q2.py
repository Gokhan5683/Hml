import matplotlib.pyplot as plt
subjects, marks = ['Math', 'Science', 'English', 'History', 'Art'], [85, 90, 78, 88, 92]
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140)
plt.title('Marks Distribution by Subject')
plt.axis('equal')  # Equal aspect ratio
plt.show()