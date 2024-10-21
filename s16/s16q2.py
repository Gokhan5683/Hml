import pandas as pd
students_df = pd.DataFrame({
    'Name': ['Alice', 'Bob', 'Charlie', 'David', 'Eva'],
    'Graduation Percentage': [85.5, 90.0, 78.5, 88.0, 92.5],
    'Age': [20, 21, 19, 22, 20]
})
print(f'Average Age: {students_df["Age"].mean():.2f}')
print(f'Average Graduation Percentage: {students_df["Graduation Percentage"].mean():.2f}')
