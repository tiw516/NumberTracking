# NumberTracking

Question:

The function can accept a numeric parameter N. Then start calculating N, N*2, N*3, and so on. Keep 
tracking of which digits (0, 1, 2, 3, 4, 5, 6, 7, 8, and 9) have appeared in results. Once each of the ten 
digits has appeared in results at least once, the function will return the last calculated number. If it has 
not been obtained all digits after 100 calculations, return False. 
Example: 
N = 12345, now you have 1 2 3 4 5 
N*2 = 24690, now you have 0 1 2 3 4 5 6 9 
N*3 = 37035, now you have 0 1 2 3 4 5 6 7 9 
N*4 = 49380, now you have 0 1 2 3 4 5 6 7 8 9 
Then return 49380