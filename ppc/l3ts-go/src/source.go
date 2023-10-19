package main

import (
	_ "embed"
	"encoding/base64"
	"fmt"
	"strconv"
)

//go:embed flag.txt
var encoded string

func check(pass int64) bool {
	passStr := strconv.FormatInt(pass, 10)
	return pass%2 == 0 && pass%2803 == 0 && passStr[3] == '3'
}

func main() {
	fmt.Println("enter the password")
	fmt.Println("it should be an integer")
	fmt.Println("and someone also whispered to me that this number is divisible by 2803, it is even and contains the number 3 in the [deleted] place")

	var userInput int64
	_, err := fmt.Scanf("%d", &userInput)
	for err != nil {
		fmt.Println("INTEGER!!!")
		return
	}

	decoded, err := base64.StdEncoding.DecodeString(encoded)
	if err != nil {
		fmt.Println("Error decoding string:", err)
		return
	}

	if check(userInput) {
		fmt.Println(string(decoded))
	} else {
		fmt.Println("Nope")
	}
}
