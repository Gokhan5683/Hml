import pandas as pd
df = pd.DataFrame({
    'name': ['Alice', 'Bob', 'Charlie', 'David', 'Eva', 'Frank', 'Grace', 'Helen', 'Ivy', 'Jack'],
    'age': [25, 30, 22, 28, 26, 35, 24, 29, 31, 27],
    'salary': [50000, 60000, 45000, 55000, 52000, 62000, 48000, 57000, 63000, 51000],
    'department': ['HR', 'IT', 'Finance', 'Marketing', 'HR', 'IT', 'Finance', 'Marketing', 'IT', 'HR']
})
print(df)
