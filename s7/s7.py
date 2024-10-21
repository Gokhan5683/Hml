import pandas as pd
from sklearn.preprocessing import LabelEncoder

# Load the data from the CSV file
data = pd.read_csv('Data.csv')

# Display the original data
print("Original Data:")
print(data)

# a. Apply One-Hot Encoding on the 'Country' column
data_one_hot = pd.get_dummies(data, columns=['Country'], drop_first=True)

# b. Apply Label Encoding on the 'Purchased' column
label_encoder = LabelEncoder()
data_one_hot['Purchased'] = label_encoder.fit_transform(data_one_hot['Purchased'])

# Display the transformed data
print("\nTransformed Data:")
print(data_one_hot)

