/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package vidu;

/**
 *
 * @author Administrator
 */
import java.util.Scanner;
public class Vidu {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        Scanner num = new Scanner(System.in);
        System.out.println("Nhap: ");
        int N = num.nextInt();
        int a = 1;
        for(int i = 2;i<N-1;i++)
        {
            if(N%i==0)
            {
                a++;
            }
        }
        if(a==2)
        {
            System.out.println("k phai la so ng t");
        }
        else
        {
            System.out.println("la so ng t");
        }
       
        /*int a = 0;
        for(int i=1;i<N;i++)
        {
            if(N%i==0)
            {
                a = a + i;
                if(a == N)
                {
                    System.out.println("La so HH");
                }
                else
                {
                    System.out.println("Khong phai la so HH");
                }
                
            }
        }*/
                   
    }
    
}
