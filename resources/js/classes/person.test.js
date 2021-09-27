import Person from "./person";

var author = new Person("Ricky", "56");

test("Person class", ()=>{
    expect(author.getName()).toBe("Ricky")
})