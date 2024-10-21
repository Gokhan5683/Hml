import pandas as pd

# Load the dataset
df = pd.read_csv('iris.csv')  # Replace with your CSV file name

# Print the first, last 5, and 10 random rows
print(df.head(), "\n")
print(df.tail(), "\n")
print(df.sample(10))

