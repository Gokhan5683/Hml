import pandas as pd
import numpy as np

df = pd.DataFrame({
    'name': ['Alice', 'Bob', 'Charlie', 'David', 'Eva', 'Frank', 'Grace', 'Helen', 'Ivy', 'Jack'],
    'age': [25, 30, 22, 28, 26, 35, 24, 29, 31, 27],
    'percentage': [85, 90, 78, 88, 92, 75, 80, 95, 89, 82]
})

print("Initial DataFrame:\n", df, "\n")

print("Shape:", df.shape)
print("Data Types:\n", df.dtypes)
print("Description:\n", df.describe(), "\n")

duplicates = pd.DataFrame({
    'name': ['Alice', 'Bob', 'Charlie', 'David', 'Eva'],
    'age': [25, 30, 22, 28, 26],
    'percentage': [85, 90, 78, np.nan, 92]  # Missing value for David
})

df = pd.concat([df, duplicates], ignore_index=True)
df['remarks'] = ''  # Add 'remarks' column with empty values

print("Updated DataFrame:\n", df)