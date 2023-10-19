#!/bin/bash

# for linux
GOOS=linux GOARCH=amd64 CGO_ENABLED=0 go build -trimpath -ldflags="-s -w" -o l3ts_go_linux source.go 

# for windows
GOOS=windows GOARCH=amd64 CGO_ENABLED=0 go build -trimpath -ldflags="-s -w" -o l3ts_go_windows source.go 