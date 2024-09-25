function test(array) {
  array.map((element) => {
    if (element > 0) {
      return element * 2;
    }

    return {
      element,
      name: "Test",
      method: (...element) => {
        return element;
      },
    };
  });
}

const array = [1, 2, 3, 4, 5];

const returnElements = test(array);
