import pandas as pd
from sklearn.preprocessing import MinMaxScaler, StandardScaler, Binarizer
data = pd.read_csv('winequality-red.csv')
print("Original Dataset:")
print(data.head())

min_max_scaler = MinMaxScaler()
normalized_data = min_max_scaler.fit_transform(data)

normalized_df = pd.DataFrame(normalized_data, columns=data.columns)
print("\nNormalized Dataset:")
print(normalized_df.head())

standard_scaler = StandardScaler()
standardized_data = standard_scaler.fit_transform(data)

standardized_df = pd.DataFrame(standardized_data, columns=data.columns)
print("\nStandardized Dataset:")
print(standardized_df.head())


binarizer = Binarizer(threshold=0.5) 
binarized_data = binarizer.fit_transform(data)

binarized_df = pd.DataFrame(binarized_data, columns=data.columns)
print("\nBinarized Dataset:")
print(binarized_df.head())


data = {
    'Feature1': [10, 20, 30, 40, 50],
    'Feature2': [100, 200, 300, 400, 500],
    'Feature3': [5, 10, 15, 20, 25]
}
df = pd.DataFrame(data)
print("Sample Dataset:")
print(df)
