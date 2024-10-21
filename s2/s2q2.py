import pandas as pd
import matplotlib.pyplot as plt

data = pd.read_csv('Data.csv')

salary_mean = data['salary'].mean()
data['salary'].fillna(salary_mean, inplace=True)

plt.figure(figsize=(10, 6))
plt.plot(data['name'], data['salary'], marker='o', linestyle='--', color='blue')

plt.title('Line Plot of Name vs Salary')
plt.xlabel('Name')
plt.ylabel('Salary')


plt.xticks(rotation=45)
plt.grid(True)

plt.tight_layout()
plt.show()

#sample dataset as input
#name,salary,age
John,50000,30
Alice,60000,25
Bob,56000,NaN
Charlie,56000,35
David,55000,20
Eve,65000,NaN
