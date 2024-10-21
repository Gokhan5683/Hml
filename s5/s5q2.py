import pandas as pd
data = pd.read_csv('User _Data.csv')
print("Shape of the DataFrame (rows, columns):", data.shape)
num_rows, num_columns = data.shape
print("Number of Rows:", num_rows)
print("Number of Columns:", num_columns)
print("\nData Types of Each Feature:")
print(data.dtypes)
print("\nFeature Names:")
print(data.columns.tolist())
print("\nDescription of the Data:")
print(data.describe(include='all'))  
