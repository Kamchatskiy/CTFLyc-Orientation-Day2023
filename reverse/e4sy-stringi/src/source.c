#include <stdio.h>
#include <string.h>

int main() {
  char input[256];
  scanf("%255s", input);

  if (strcmp(input, "CTFlyc{b4by_r3v3rs3}") == 0) {
    printf("y0u'r3 g0ddamn right");
  } else {
    printf("aboba.");
  }

  return 0;
}