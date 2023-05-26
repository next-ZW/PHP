
def sort_lijst_asc(arr: []) -> []:

    to_sort = True
    while to_sort:
        to_sort = False
        for x in range(len(arr) - 1):
            print(x)
            if arr[x] > arr[x + 1]:
                arr[x], arr[x + 1] = arr[x + 1], arr[x]
                to_sort = True
    return arr

print(sort_lijst_asc([5, 3, 2]))
print(sort_lijst_asc([67, 15, 22, 68, 3]))

 