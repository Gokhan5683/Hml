import pandas as pd
data = pd.read_csv('Data.csv')
print("Original Dataset:")
print(data)
salary_mean = data['salary'].mean()
age_mean = data['age'].mean()

print("\nMean of 'salary' column:", salary_mean)
print("Mean of 'age' column:", age_mean)

data['salary'].fillna(salary_mean, inplace=True)
data['age'].fillna(age_mean, inplace=True)

print("\nDataset after handling missing values:")
print(data)

print("\nVerify mean values:")
print("Salary of Bob:", data.loc[data['name'] == 'Bob', 'salary'].values[0])
print("Age of Charlie:", data.loc[data['name'] == 'Charlie', 'age'].values[0])
print("Age of Eve:", data.loc[data['name'] == 'Eve', 'age'].values[0])

# Sample Dataset
#name,salary,age
John,50000,30
Alice,60000,25
Bob,70000,NaN
Charlie,NaN,35
David,55000,20
Eve,65000,NaN
