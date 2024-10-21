import matplotlib.pyplot as plt
subjects, marks = ['Math', 'Science', 'English'], [85, 90, 78]
plt.figure(figsize=(12, 6))

plt.subplot(1, 2, 1)
plt.pie(marks, labels=subjects, autopct='%1.1f%%', startangle=140)
plt.title('Marks Distribution by Subject')
plt.axis('equal')

plt.subplot(1, 2, 2)
plt.bar(subjects, marks, color='skyblue')
plt.title('Marks Obtained in Subjects')
plt.xlabel('Subjects')
plt.ylabel('Marks')

plt.tight_layout()
plt.show()