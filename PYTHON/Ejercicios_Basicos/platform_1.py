from platform import platform, machine, python_version_tuple, system, version
from platform import python_implementation, python_version

print(python_implementation())

for atr in python_version_tuple():
    print(atr, end=' . ')
print(system(), end='')
print(version())
print(machine())
print(platform())
print(platform(1))
print(platform(0, 1))
 