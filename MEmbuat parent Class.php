//Membuat parent class
open class Person() {
    //membuat function agar dapat diturunkan menggunakan keyword open
    fun displayAge(age: Int) {
        //mencetak "My actual age is " dan nilai dari $age
        println("My actual age is $age.")
    }
}

//memubat child class
class Girl: Person() {
    //untuk menulis ulang funtion dari parent class
    override fun displayAge(age: Int) {

        //memanggil fungsi di parent class, yaitu mencetak "My actual age is " dan nilai $age
        super.displayAge(age)
        
        //mencetak kata "My fake age is " dan nilai dari $age setelah nilai $age - 5
        println("My fake age is ${age - 5}.")
    }
}

fun main(args: Array<String>) {
    //membuat objek girl dari class Girl
    val girl = Girl()
    //meanggil funtion displayAge dari class Girl, memberikan nilai, kemudian di cetak
    girl.displayAge(31)
}