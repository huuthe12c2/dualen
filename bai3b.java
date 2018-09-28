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
public class bai3b {
    public static void main(String[] args) {
     Scanner Num = new Scanner(System.in);
    System.out.println("Nhap: ");
    Double N = Num.nextDouble();
    int a = 0;
        for(int i=1;i<N;i++)
        {
            if(N%i==0)
            {
                a = a + i;
            }
        }  
        if(a == N)
                {
                    System.out.println("La so HH");
                }
                else
                {
                    System.out.println("Khong phai la so HH");
                }
                
    }
}
