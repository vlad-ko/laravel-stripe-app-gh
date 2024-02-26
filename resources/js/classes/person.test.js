import Person from "./person";

var author = new Person("Ricky", "56", "The Danger", "Bobby");

test("Person class", ()=>{
    expect(author.getName()).toBe("Ricky")
})

test("Person class", ()=>{
    expect(author.getNickname()).toBe("The Danger")
})

test("Person class", ()=>{
    expect(author.getLastName()).toBe("Bobby")
})

test("Person class", ()=>{
    expect(author.getEleven()).toBe(11)
})

test("Person class", ()=>{
    expect(author.getAccessLevel()).toBe('admin');
})

test("Person class", ()=>{
    expect(author.getMenuOptions()).toBe('menu options');
})