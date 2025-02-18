#include <iostream>
using namespace std;

class BankAccount
{
private:
    double balance;

public:
    void setBalance(double amount)
    {
        balance = amount;
    }

    friend void displayBalance(const BankAccount &account);
};

void displayBalance(const BankAccount &account)
{
    printf("Balance: $%.2f\n", account.balance);
}

int main()
{
    BankAccount myAccount;
    myAccount.setBalance(1500.75);
    displayBalance(myAccount);
    return 0;
}
