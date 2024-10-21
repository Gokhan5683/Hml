import pandas as pd
data = pd.read_csv('heights_weights.csv')
print("First few rows of the dataset:")
print(data.head())
print("\nBasic Statistical Details:")
print(data.describe())
