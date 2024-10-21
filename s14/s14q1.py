import numpy as np
arr = np.array([[1, 2, 3], [4, 5, 6], [7, 8, 9]]).flatten()
weights = np.ones(arr.shape)
print("Weighted Avg:", np.average(arr, weights=weights))
