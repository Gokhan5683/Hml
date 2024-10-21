import pandas as pd
df = pd.DataFrame({
    'Name': ['John', 'Jane', 'John', 'Anna', 'Max'],
    'Salary': [50000, None, 50000, 72000, None],
    'Dept': ['HR', 'Finance', 'HR', 'IT', None]
})
df_cleaned = df.dropna()  # Drop rows with null values
print(df, "\n\nModified DataFrame:\n", df_cleaned)