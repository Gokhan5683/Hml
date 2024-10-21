import pandas as pd
data = {
    'pH': [3.51, 3.20, 3.26, 3.16, 3.51],
    'alcohol': [9.4, 9.8, 9.8, 9.8, 9.4],
    'quality': [5, 5, 5, 6, 5]
}

wine_data = pd.DataFrame(data)
statistical_summary = wine_data.describe()
print(statistical_summary)
