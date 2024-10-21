import pandas as pd
from sklearn.preprocessing import StandardScaler
data = pd.read_csv('winequality-red.csv')
print("Original Data:")
print(data.head())
scaler = StandardScaler()
features = data.iloc[:, :-1]  
target = data.iloc[:, -1]    
standardized_features = scaler.fit_transform(features)
standardized_data = pd.DataFrame(standardized_features, columns=features.columns)
standardized_data['quality'] = target.values
print("\nStandardized Data:")
print(standardized_data.head())
print("\nMean of Standardized Features:")
print(standardized_data.iloc[:, :-1].mean())  
print("\nStandard Deviation of Standardized Features:")
print(standardized_data.iloc[:, :-1].std())  
