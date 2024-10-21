import pandas as pd
# Read the CSV and print statistics in one line
print(pd.read_csv('iris.csv').describe())
