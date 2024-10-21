import matplotlib.pyplot as plt
subjects = ['Math', 'Science', 'English', 'History', 'Art']
marks = [85, 90, 78, 88, 95]
plt.figure(figsize=(8, 8)) 
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140)
plt.title('Marks Obtained in Subjects')
plt.show()
