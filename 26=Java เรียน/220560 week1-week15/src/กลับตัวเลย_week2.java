import java.util.Scanner;
public class ��Ѻ������_week2 {
    public static void main (String[] args){
       Scanner aom = new Scanner(System.in); //��С�ȵ��������Ѻ����ҹ���������
       /*  ��ҹ�����Ũҡ�����������㹵����     */
       int x=aom.nextInt();            // ����Ţ�ӹǹ���
       double  xx=aom.nextDouble();    // ����Ţ�ӹǹ�ȹ���
       char ch=aom.next().charAt(1);   // �ѡ�� ���ѡ��е�� charAt(�ӹǹ);  
       String chh=aom.next();          // ��ͤ��
    
     String name;
     name=aom.next();
     System.out.print(x+"\n"+xx+"\n"+ch+"\n"+chh+"\n");
     System.out.print(name);
     
     /* input 
        23
        12.3
        as
        afg
        adsf*/
     
     
       
    }
}